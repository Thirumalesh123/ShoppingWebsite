package com.gemini.shopping.GeminishoppingBackend.test;
import static org.junit.Assert.assertEquals;
import org.junit.BeforeClass;
import org.junit.Ignore;
import org.junit.Test;
import org.springframework.context.annotation.AnnotationConfigApplicationContext;
import com.gemini.shopping.GeminishoppingBackend.dao.UserDAO;
import com.gemini.shopping.GeminishoppingBackend.model.Address;
import com.gemini.shopping.GeminishoppingBackend.model.Cart;
import com.gemini.shopping.GeminishoppingBackend.model.User;
	public class Usertest {

	private static AnnotationConfigApplicationContext context;
	private static UserDAO userDAO;
	private User user=null;
	private Cart cart=null;
	private Address address=null;

	@BeforeClass
	public static void init() {
	context = new AnnotationConfigApplicationContext();
	context.scan("com.gemini.shopping.GeminishoppingBackend");
	context.refresh();
	userDAO=(UserDAO)context.getBean("userDAO");
	}

	@Ignore
	@Test
	public void AddUser()
	{
	user = new User();
	user.setFirstname("Kurakula");
	user.setLastname("Tirumalesh");
	user.setEmail("thirumalesh@gmail.com");
	user.setContactNo("9652444444");
	user.setEnabled(true);
	user.setRole("USER");
	user.setPassword("password@123");


	address= new Address();
	address.setAddressLineOne("cheruvu center");
	address.setAddressLineTwo("ramaraja nagar");
	address.setCity("vijayawada");
	address.setState("AP");
	address.setPostalcode("520012");
	address.setCountry("India");
	address.setBilling(true);


	cart=new Cart();
	address.setUser(user);
	user.setCart(cart);


	assertEquals("Failed to add this user",true,userDAO.addUser(user));
	assertEquals("Failed to add the billing address!!",true,userDAO.addAddress(address));

	address= new Address();
	address.setAddressLineOne("manikonda");
	address.setAddressLineTwo("alkapur townshoip");
	address.setCity("hyd");
	address.setState("TS");
	address.setPostalcode("520012");
	address.setCountry("India");
	address.setShipping(true);
	address.setUser(user);
	assertEquals("Failed to add the shipping address!!",true,userDAO.addAddress(address));


	}

	@Ignore
	@Test
	public void AddAddress()
	{
	user=userDAO.getEmailById("dse@gmail.com");
	address= new Address();
	address.setAddressLineOne("shanti nagar");
	address.setAddressLineTwo("near dav school");
	address.setCity("Chatrapur");
	address.setState("Odisha");
	address.setPostalcode("761020");
	address.setCountry("India");




	address.setUser(user);


	assertEquals("Failed to add the address!!",true,userDAO.addAddress(address));
	}


	@Test
	public void listofuser()
	{
		assertEquals("done",4,userDAO.list().size());
	}
	
	}