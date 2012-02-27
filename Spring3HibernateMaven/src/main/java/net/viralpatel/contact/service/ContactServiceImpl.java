package net.viralpatel.contact.service;

import java.util.List;

import net.viralpatel.contact.dao.PostDAO;
import net.viralpatel.contact.form.Post;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import net.viralpatel.contact.dao.ContactsDAO;
import net.viralpatel.contact.form.Contact;

@Service
public class ContactServiceImpl implements ContactService {

	@Autowired
	private ContactsDAO contactsDAO;

    @Autowired
    private PostDAO postDAO;

	@Transactional
	public void addContact(Contact contact) {
		contactsDAO.addContact(contact);
	}

	@Transactional
	public List<Contact> listContact() {
        List<Contact> L=  contactsDAO.listContact();
        List<Post> P = postDAO.listPost();
       // Начало жесктой ф-ции (как я понимаю єтим должен заниматься хибернейт)
        for(Contact c : L)
        {
            for(Post p : c.getPost())
            {
                if(c.getId().equals(p.getId()))
                {
                    P = postDAO.listPost();
                    int i= 0;
                    while (i<P.size())
                    {
                        if(P.get(i).getId().equals(c.getId()))
                        {
                           i++;
                        }
                        else
                        {
                            P.remove(i);
                            i=0;
                        }
                    }
                    c.setPost(P);   
                }
                 
            }
        }
// посути здесь я  явно проинициализировал Список постов который является свойством класса Contact
//-------------------конуц жесткой функции
		return L;
	}

	@Transactional
	public void removeContact(Integer id) {
		contactsDAO.removeContact(id);
	}
}
