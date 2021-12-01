package com.gemini.shopping.GeminishoppingBackend.dao;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;

import com.gemini.shopping.GeminishoppingBackend.model.ContactUs;

public interface ContactUsDAO {
	@Autowired
	List<ContactUs> list();
	boolean add(ContactUs contactUs);
}
