
package com.gemini.shopping.GeminishoppingBackend.test;
import static org.junit.Assert.assertEquals;
import org.junit.BeforeClass;
import org.junit.Ignore;
import org.junit.Test;
import org.springframework.context.annotation.AnnotationConfigApplicationContext;

import com.gemini.shopping.GeminishoppingBackend.dao.ContactUsDAO;
import com.gemini.shopping.GeminishoppingBackend.model.ContactUs;



public class contacttest {
	private static AnnotationConfigApplicationContext context;
	private static ContactUsDAO contactUsDAO;
	private static ContactUs contactus;
	@BeforeClass
	public static void init() {
		context=new AnnotationConfigApplicationContext();
		context.scan("com.gemini.shopping.GeminishoppingBackend");
		context.refresh();
		contactUsDAO=(ContactUsDAO)context.getBean("contactus");
	}
	
	@Test
	public void Add() {
		contactus=new ContactUs();
		contactus.setName("Tirumalesh");
		contactus.setEmail("Thirumaleshgemini@gmail.com");
		contactus.setMessage("hello");
		
		assertEquals("added successfully",true,contactUsDAO.add(contactus));
	}

	
	
	@Ignore
	@Test
	public void list() {
		
		assertEquals("updated successfully",1,contactUsDAO.list().size());
	}
}