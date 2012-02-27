package net.viralpatel.contact.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

import java.util.Map;

/**
 * Created by IntelliJ IDEA.
 * User: Egorevo
 * Date: 06.02.12
 * Time: 20:08
 * To change this template use File | Settings | File Templates.
 */
@Controller
public class myPageController {
    @RequestMapping(value = {"/", "/index"})
    public String listContacts(Model model)
    {
        return "index";
    }
}
