package net.viralpatel.contact.form;

import org.springframework.format.annotation.DateTimeFormat;

import javax.persistence.*;
import java.sql.Date;
import java.sql.Timestamp;
import java.util.List;

/**
 * Created by IntelliJ IDEA.
 * User: Egorevo
 * Date: 13.02.12
 * Time: 16:50
 * To change this template use File | Settings | File Templates.
 */
@Entity
@Table(name="POSTS")
public class Post {
    @Id
    @Column(name="ID_POST")
    @GeneratedValue
    private Integer id_post;

    //@ManyToOne(fetch = FetchType.LAZY)
    @Column(name = "ID")
    private Integer id;


    @Column(name = "ID_CHILD")
    private Integer id_child;

    @Column(name = "ID_PARENT")
    private Integer id_parent;

    @Column(name="TITLE")
    private String title;

    @Column(name = "TEXT_M")
    private String text_m;

    @DateTimeFormat
    @Column(name = "CREATED")
    @GeneratedValue
    private Timestamp created = new Timestamp(System.currentTimeMillis());


    @ManyToOne // (fetch=FetchType.LAZY)
    private Contact contact;

    @OneToMany (cascade = CascadeType.ALL, mappedBy = "post")
    @JoinColumn(name = "post_id")
    private List<Comments> comments;




    public List<Comments> getComments() {
        return comments;
    }

    public void setComments(List<Comments> comments) {
        this.comments = comments;
    }

    public Contact getContact()
    {
        return contact;
    }
    public void setContact(Contact contact)
    {
        this.contact=contact;
    }
    public void setCreated(Timestamp created)
    {
        this.created=created;
    }

    public Timestamp getCreated()
    {
        return created;
    }


    public void setTitle(String title)
    {
        this.title=title;
    }
    public String getTitle()
    {
        return title;
    }



    
    public void setId(Integer id)
    {
        this.id=id;
    }
    public Integer getId()
    {
        return id;
    }
    public void setId_post(Integer id_post)
    {
        this.id_post=id_post;
    }
    public Integer getId_post()
    {
        return id_post;
    }
    public void setId_child(Integer id_child)
    {
        this.id_child=id_child;
    }
    public Integer getId_child()
    {
        return id_child;
    }
    public void setId_parent(Integer id_parent)
    {
        this.id_parent=id_parent;
    }
    public Integer getId_parent()
    {
        return id_parent;
    }
    public void setText_m(String text_m)
    {
        this.text_m=text_m;
    }
    public String getText_m()
    {
        return text_m;
    }
}
