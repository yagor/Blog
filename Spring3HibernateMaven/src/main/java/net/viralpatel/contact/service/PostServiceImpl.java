package net.viralpatel.contact.service;

import net.viralpatel.contact.dao.ContactDAO;
import net.viralpatel.contact.dao.PostDAO;
import net.viralpatel.contact.form.Contact;
import net.viralpatel.contact.form.Post;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;
import org.springframework.util.StringUtils;

import java.util.List;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

/**
 * Created by IntelliJ IDEA.
 * User: Egorevo
 * Date: 13.02.12
 * Time: 17:09
 * To change this template use File | Settings | File Templates.
 */
@Service
public class PostServiceImpl implements PostService{
    @Autowired
    private PostDAO postDAO;

    @Transactional
    public void addPost(Post post) {

        String str=post.getText_m();
        str=StringUtils.replace(str,"<","&lt;");
        str=StringUtils.replace(str,">","&gt;");
        str=StringUtils.replace(str,"\n","<br/>");

        if(post.getTitle().isEmpty())
        {
            post.setTitle("No title");
        }
        post.setText_m(str);


        postDAO.addPost(post);
    }

    @Transactional
    public List<Post> listPost() {

       return postDAO.listPost();
    }

    @Transactional
    public void removePost(Integer id_post) {
        postDAO.removePost(id_post);
    }

}
