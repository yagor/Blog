package net.viralpatel.contact.service;

import net.viralpatel.contact.dao.CommentsDAO;
import net.viralpatel.contact.dao.PostDAO;
import net.viralpatel.contact.form.Comments;
import net.viralpatel.contact.form.Post;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;
import org.springframework.util.StringUtils;

import java.util.List;

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

    @Autowired
    private CommentsDAO commentsDAO;
    
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

        List<Post> L =  postDAO.listPost() ;
        List<Comments> C = commentsDAO.listComments();
        for(Post p : L)
        {
            for(Comments com : p.getComments())
            {
                C = commentsDAO.listComments();
                int i= 0;
                while (i<C.size())
                {
                    if(C.get(i).getPost_id().equals(p.getId_post()))
                    {
                        i++;   
                    }
                    else 
                    {
                       C.remove(i);
                        i=0;
                    }
                }
            }
        }
       
        return L;
    }

    @Transactional
    public void removePost(Integer id_post) {
        postDAO.removePost(id_post);
    }

}
