package com.gemini.shopping.GeminishoppingBackend.test;
import static org.junit.Assert.assertEquals;
import org.junit.BeforeClass;
import org.junit.Ignore;
import org.junit.Test;
import org.springframework.context.annotation.AnnotationConfigApplicationContext;
import com.gemini.shopping.GeminishoppingBackend.dao.CategoryDAO;
import com.gemini.shopping.GeminishoppingBackend.model.Category;


public class categorytest {
	private static AnnotationConfigApplicationContext context;
	private static CategoryDAO categoryDao;
	private static Category category;
	@BeforeClass
	public static void init() {
		context=new AnnotationConfigApplicationContext();
		context.scan("com.gemini.shopping.GeminishoppingBackend");
		context.refresh();
		categoryDao=(CategoryDAO)context.getBean("categoryDao");
	}
	@Ignore
	@Test
	public void Add() {
		category=new Category();
		category.setName("Tirumalesh");
		category.setDescription("Thirumaleshgemini@gmail.com");
		category.setImage_url("image.jp");
		
		assertEquals("added successfully",true,categoryDao.add(category));
	}

	@Test
	public void update() {
		category=categoryDao.get(6);
		category.setName("Tirumalesh");
		category.setDescription("Thirumaleshgemini@gmail.com");
		category.setImage_url("ind.jpg");
		category.setIs_active(true);
		assertEquals("updated successfully",true,categoryDao.update(category));
	}
	@Ignore
	@Test
	public void delete() {
		category=categoryDao.get(1);
		assertEquals("updated successfully",true,categoryDao.delete(category));
	}
	@Ignore
	@Test
	public void list() {
		
		assertEquals("updated successfully",1,categoryDao.list().size());
	}
}
