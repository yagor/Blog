package net.viralpatel.contact.controller;

import net.viralpatel.contact.form.Contact;
import net.viralpatel.contact.form.Post;
import net.viralpatel.contact.service.ContactService;
import net.viralpatel.contact.service.PostService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
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

    @RequestMapping(value = {"/posts"})
    public String listPosts(Map<String, Object> map) {

        map.put("post", new Post());
        map.put("postList", postService.listPost());

        return "posts";
    }
    @RequestMapping(value = "/addpost", method = RequestMethod.POST)
    public String addPost(@ModelAttribute("posts") Post post, BindingResult result)
    {
        postService.addPost(post);
        return "redirect:/posts";
    }
   // @RequestMapping()
   @RequestMapping("posts/delete/{postId}")
   public String deleteContact(@PathVariable("postId") Integer postId)
   {
       postService.removePost(postId);
       return "redirect:/posts";
   }
}
