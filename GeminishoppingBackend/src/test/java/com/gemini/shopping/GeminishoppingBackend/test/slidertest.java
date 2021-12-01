package com.gemini.shopping.GeminishoppingBackend.test;

import static org.junit.Assert.assertEquals;

import org.junit.BeforeClass;
import org.junit.Ignore;
import org.junit.Test;
import org.springframework.context.annotation.AnnotationConfigApplicationContext;

import com.gemini.shopping.GeminishoppingBackend.dao.SliderDAO;
import com.gemini.shopping.GeminishoppingBackend.model.Slider;



public class slidertest {
	private static AnnotationConfigApplicationContext context;
	private static SliderDAO sliderDao;
	private static Slider slider;
		@BeforeClass
		public static void init() {
			context=new AnnotationConfigApplicationContext();
			context.scan("com.gemini.shopping.GeminishoppingBackend");
			context.refresh();
			sliderDao=(SliderDAO)context.getBean("sliderDao");
		}
		@Ignore
		@Test
		public void testAdd() {
			slider=new Slider();
			slider.setImage_url("Samsung s10 Note");
			slider.setHeading("Samsung");
			
			slider.setDescription("hello");
			assertEquals("added successfully",true,sliderDao.add(slider));
		}
		@Ignore
		@Test
		public void testupdate() {
			slider=new Slider();
			slider.setImage_url("Samsung s10 Note");
			slider.setHeading("Samsung");
			
			slider.setDescription("hello");
			assertEquals("added successfully",true,sliderDao.update(slider));
		}
		@Ignore
		@Test
		public void testdelete() {
			
			slider=sliderDao.get(1);
			assertEquals("deleted successfully",true,sliderDao.delete(slider));
		}
		
		@Test
		public void testlist() {
			
			assertEquals("updated successfully",1,sliderDao.list().size());
		}
		@Ignore
		@Test
		public void test() {
			
			assertEquals("updated successfully",1,sliderDao.get(1));
		}
}
