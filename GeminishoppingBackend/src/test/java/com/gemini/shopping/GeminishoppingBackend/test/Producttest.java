package com.gemini.shopping.GeminishoppingBackend.test;
import static org.junit.Assert.assertEquals;
import org.junit.BeforeClass;
import org.junit.Ignore;
import org.junit.Test;
import org.springframework.context.annotation.AnnotationConfigApplicationContext;
import com.gemini.shopping.GeminishoppingBackend.dao.ProductDAO;
import com.gemini.shopping.GeminishoppingBackend.model.Product;
public class Producttest {
private static AnnotationConfigApplicationContext context;
private static ProductDAO productDao;
private static Product product;
	@BeforeClass
	public static void init() {
		context=new AnnotationConfigApplicationContext();
		context.scan("com.gemini.shopping.GeminishoppingBackend");
		context.refresh();
		productDao=(ProductDAO)context.getBean("productDao");
	}
	@Ignore
	@Test
	public void testAdd() {
		product=new Product();
		product.setName("Samsung s10 Note");
		product.setBrand("Samsung");
		product.setCode("2");
		product.setCost(78000);
		product.setIsactive(true);
		product.setDescription("This product is great one balabalabala");
		product.setQuantity(50);
		product.setViews(50);
		product.setCategoryId(0);
		product.setPurchases(20);
			product.setSupplierId(0);
		assertEquals("added successfully",true,productDao.add(product));
	}
	@Ignore
	@Test
	public void testupdate() {
		
		product=productDao.get(1);
		product.setName("Iphone 13 max");
		product.setBrand("Apple");
		product.setCode("1235");
		product.setCost(18000);
		product.setIsactive(false);
		product.setDescription("This product is great one balabalabala");
		product.setQuantity(50);
		product.setViews(50);
		product.setCategoryId(0);
		product.setPurchases(20);
		product.setSupplierId(0);
		assertEquals("added successfully",true,productDao.update(product));
	}
	@Ignore
	@Test
	public void testdelete() {
		
		product=productDao.get(1);
		assertEquals("added successfully",true,productDao.delete(product));
	}
	@Ignore
	@Test
	public void testlist() {
		
		assertEquals("updated successfully",2,productDao.list().size());
	}
	@Ignore
	@Test
	public void testlistactiveproducts() {
		
		assertEquals("updated successfully",2,productDao.listActiveProducts());
	}
	@Ignore
	@Test
	public void testlistactiveProductsbycategory() {
		
		assertEquals("updated successfully",6,productDao.listActiveProductByCategory(1));
	}
	@Ignore
	@Test
	public void test() {
		
		assertEquals("updated successfully",1,productDao.get(1));
	}
	@Ignore
	@Test
	public void testmen() {
		
		assertEquals("men products",1,productDao.men());
	}
	
	
}