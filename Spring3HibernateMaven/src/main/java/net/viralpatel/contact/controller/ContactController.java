package net.viralpatel.contact.controller;

import java.util.Map;

import net.viralpatel.contact.form.Contact;
import net.viralpatel.contact.service.ContactService;

import net.viralpatel.contact.service.PostService;
import org.hibernate.Hibernate;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;

@Controller
public class ContactController {

	@Autowired
	private ContactService contactService;

    @RequestMapping(value = {"/myPage"})
	public String listContacts(Map<String, Object> map) {

        Contact contact = new Contact();

        map.put("contact", contact);
		map.put("contactList", contactService.listContact());

		return "myPage";
	}

	@RequestMapping(value = "/add", method = RequestMethod.POST)
	public String addContact(@ModelAttribute("myPage")
	Contact contact, BindingResult result) {

		contactService.addContact(contact);

		return "redirect:/myPage";
	}

	@RequestMapping("/delete/{contactId}")
	public String deleteContact(@PathVariable("contactId")
	Integer contactId) {

		contactService.removeContact(contactId);

		return "redirect:/myPage";
	}
}
