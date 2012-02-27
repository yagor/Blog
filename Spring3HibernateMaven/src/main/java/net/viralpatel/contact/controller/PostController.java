package net.viralpatel.contact.controller;

import net.viralpatel.contact.form.Comments;
import net.viralpatel.contact.form.Contact;
import net.viralpatel.contact.form.Post;
import net.viralpatel.contact.service.CommentService;
import net.viralpatel.contact.service.ContactService;
import net.viralpatel.contact.service.PostService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;

import java.util.Map;

/**
 * Created by IntelliJ IDEA.
 * User: Egorevo
 * Date: 13.02.12
 * Time: 17:22
 * To change this template use File | Settings | File Templates.
 */
@Controller
public class PostController {
    @Autowired
    private PostService postService;

    @Autowired
    private CommentService commentService;
    @RequestMapping(value = {"/posts"})
    public String listPosts(Map<String, Object> map) {

        map.put("comments", new Comments());
        map.put("listComments", commentService.listComments());
        map.put("post", new Post());
        map.put("postList", postService.listPost());

        return "posts";
    }
    @RequestMapping(value = "/addpost", method = RequestMethod.POST)
    public String addPost(@ModelAttribute("posts") Post post, BindingResult result)
    {

        post.setId(post.getContact().getId());
        postService.addPost(post);
        return "redirect:/posts";
    }


   
    @RequestMapping(value = "/addcomment", method = RequestMethod.POST)
    public String addComment(@ModelAttribute("posts") Comments comments, BindingResult result, Post post, Model model)
    {

     //   comments.setPost_id(post.getId());
     //   comments.setPost_id(comments.getPost().getId_post());
        comments.setId(comments.getContact().getId());
        commentService.addComment(comments);
        return "redirect:/posts";
    }

    @RequestMapping("posts/deletecomment/{commentId}")
    public String deleteComment(@PathVariable("commentId") Integer commentId)
    {
        commentService.removeComment(commentId);
        return "redirect:/posts";
    }

   @RequestMapping("posts/delete/{postId}")
   public String deleteContact(@PathVariable("postId") Integer postId)
   {
       postService.removePost(postId);
       return "redirect:/posts";
   }
}
