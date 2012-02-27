package net.viralpatel.contact.form;

import javax.persistence.*;
import java.util.List;

@Entity
@Table(name="CONTACTS")
public class Contact {
	
	@Id
	@Column(name="ID")
	@GeneratedValue
    //@OneToMany(mappedBy = "id")
	private Integer id;

   // @OneToMany(mappedBy = "id_post")
	@Column(name="FIRSTNAME")
	private String firstname;

	@Column(name="LASTNAME")
	private String lastname;

	@Column(name="EMAIL")
	private String email;
	
	@Column(name="TELEPHONE")
	private String telephone;

    @Column(name="PASWORD")
    private String pasword;



    @OneToMany (cascade = CascadeType.ALL, mappedBy = "contact")
    @JoinColumn(name = "id")
    private List<Post> post;

    @OneToMany (cascade = CascadeType.ALL, mappedBy = "contact")
    @JoinColumn(name = "id")
    private List<Comments> comments;


    public List<Comments> getComments() {
        return comments;
    }

    public void setComments(List<Comments> comments) {
        this.comments = comments;
    }

    public List<Post> getPost() {
        return  post;
    }

    public void setPost(List<Post> post) {
        this.post = post;
    }




    public String getPasword()
    {
        return pasword;
    }
    public void setPasword(String pasword)
    {
        this.pasword=pasword;
    }

    public String getEmail() {
		return email;
	}
	public String getTelephone() {
		return telephone;
	}
	public void setEmail(String email) {
		this.email = email;
	}
	public void setTelephone(String telephone) {
		this.telephone = telephone;
	}
	public String getFirstname() {
		return firstname;
	}
	public String getLastname() {
		return lastname;
	}
	public void setFirstname(String firstname) {
		this.firstname = firstname;
	}
	public void setLastname(String lastname) {
		this.lastname = lastname;
	}
	public Integer getId() {
		return id;
	}
	public void setId(Integer id) {
		this.id = id;
	}
	
}
