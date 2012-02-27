package net.viralpatel.contact.dao;

import net.viralpatel.contact.form.Comments;
import net.viralpatel.contact.form.Contact;
import org.springframework.stereotype.Component;

import java.util.List;

/**
 * Created by IntelliJ IDEA.
 * User: Egorevo
 * Date: 23.02.12
 * Time: 20:41
 * To change this template use File | Settings | File Templates.
 */

public interface CommentsDAO {
    public void addComments(Comments comments);
    public List<Comments> listComments();
    public void removeComments(Integer comment_id);
}
