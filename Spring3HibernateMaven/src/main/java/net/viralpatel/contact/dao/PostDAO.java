package net.viralpatel.contact.dao;

import net.viralpatel.contact.form.Contact;
import net.viralpatel.contact.form.Post;

import java.util.List;

/**
 * Created by IntelliJ IDEA.
 * User: Egorevo
 * Date: 13.02.12
 * Time: 17:02
 * To change this template use File | Settings | File Templates.
 */
public interface PostDAO {

    public void addPost(Post post);
    public List<Post> listPost();
    public void removePost(Integer id_post);
}
