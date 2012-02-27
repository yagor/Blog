package net.viralpatel.contact.dao;

import net.viralpatel.contact.form.Comments;
import net.viralpatel.contact.form.Contact;
import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

import java.util.List;

/**
 * Created by IntelliJ IDEA.
 * User: Egorevo
 * Date: 23.02.12
 * Time: 20:44
 * To change this template use File | Settings | File Templates.
 */
@Repository
public class CommentsDAOImpl implements CommentsDAO {
    @Autowired
    SessionFactory sessionFactory;

    public void addComments(Comments comments) {
        sessionFactory.getCurrentSession().save(comments);

    }

    public List<Comments> listComments() {


        return sessionFactory.getCurrentSession().createQuery("from Comments order by created asc ").list();

    }

    public void removeComments(Integer comment_id) {
        Comments comments = (Comments) sessionFactory.getCurrentSession().load(
                Comments.class, comment_id);
        if (null != comments) {
            sessionFactory.getCurrentSession().delete(comments);
        }


    }


}
