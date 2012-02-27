package net.viralpatel.contact.service;

import net.viralpatel.contact.form.Comments;
import net.viralpatel.contact.form.Contact;

import java.util.List;

/**
 * Created by IntelliJ IDEA.
 * User: Egorevo
 * Date: 23.02.12
 * Time: 20:18
 * To change this template use File | Settings | File Templates.
 */
public interface CommentService {
    public void addComment(Comments comments);
    public List<Comments> listComments();
    public void removeComment(Integer id);
}
