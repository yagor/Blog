package net.viralpatel.contact.service;

import net.viralpatel.contact.dao.CommentsDAO;
import net.viralpatel.contact.form.Comments;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;

/**
 * Created by IntelliJ IDEA.
 * User: Egorevo
 * Date: 23.02.12
 * Time: 20:20
 * To change this template use File | Settings | File Templates.
 */
@Repository
public class CommentServiceImpl implements CommentService{


    @Autowired
    CommentsDAO commentDAO;

    
    @Transactional
    public void addComment(Comments comments) {
        commentDAO.addComments(comments);
    }

    @Transactional
    public List<Comments> listComments() {
        return commentDAO.listComments();

    }
    @Transactional
    public void removeComment(Integer id) {
        commentDAO.removeComments(id);
    }
}
