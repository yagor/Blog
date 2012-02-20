package net.viralpatel.contact.dao;

import net.viralpatel.contact.form.Contact;
import net.viralpatel.contact.form.Post;
import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;

import java.util.List;

/**
 * Created by IntelliJ IDEA.
 * User: Egorevo
 * Date: 13.02.12
 * Time: 17:04
 * To change this template use File | Settings | File Templates.
 */
@Repository
public class PostDAOImpl implements PostDAO{

    @Autowired
    private SessionFactory sessionFactory;

    public void addPost(Post post) {
        sessionFactory.getCurrentSession().save(post);
    }

    public List<Post> listPost() {

        return sessionFactory.getCurrentSession().createQuery("from Post order by created asc ")
                .list();
    }

    public void removePost(Integer id_post) {
        Post post = (Post) sessionFactory.getCurrentSession().load(
                Post.class, id_post);
        if (null != post) {
            sessionFactory.getCurrentSession().delete(post);
        }

    }

}
