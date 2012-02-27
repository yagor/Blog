package net.viralpatel.contact.form;

import org.springframework.format.annotation.DateTimeFormat;

import javax.persistence.*;
import java.sql.Timestamp;

/**
 * Created by IntelliJ IDEA.
 * User: Egorevo
 * Date: 23.02.12
 * Time: 19:50
 * To change this template use File | Settings | File Templates.
 */
@Entity
@Table (name="Comments")
public class Comments {

    @Column(name = "comment_id")
    @Id
    @GeneratedValue
    Integer comment_id;

    @Column (name="id")
    Integer id;

    @Column(name = "commentText")
    String commentText;




    @Column (name="post_id")
    Integer post_id;

    @DateTimeFormat
    @Column(name = "created")
    @GeneratedValue
    private Timestamp created = new Timestamp(System.currentTimeMillis());

    @ManyToOne
    private Post post;


    @ManyToOne
    private Contact contact;

    public Post getPost() {
        return post;
    }

    public void setPost(Post post) {
        this.post = post;
    }

    public Contact getContact() {
        return contact;
    }

    public void setContact(Contact contact) {
        this.contact = contact;
    }

    public Integer getPost_id() {
        return post_id;
    }

    public void setPost_id(Integer post_id) {
        this.post_id = post_id;
    }
    public Timestamp getCreated() {
        return created;
    }

    public void setCreated(Timestamp created) {
        this.created = created;
    }

    public Integer getComment_id() {
        return comment_id;
    }

    public void setComment_id(Integer comment_id) {
        this.comment_id = comment_id;
    }


    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getCommentText() {
        return commentText;
    }

    public void setCommentText(String commentText) {
        this.commentText = commentText;
    }
}
