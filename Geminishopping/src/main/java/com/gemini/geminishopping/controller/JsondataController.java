package com.gemini.geminishopping.controller;
import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;
import com.gemini.shopping.GeminishoppingBackend.dao.CategoryDAO;
import com.gemini.shopping.GeminishoppingBackend.dao.ContactUsDAO;
import com.gemini.shopping.GeminishoppingBackend.dao.ProductDAO;
import com.gemini.shopping.GeminishoppingBackend.dao.SliderDAO;
import com.gemini.shopping.GeminishoppingBackend.dao.UserDAO;
import com.gemini.shopping.GeminishoppingBackend.model.Category;
import com.gemini.shopping.GeminishoppingBackend.model.ContactUs;
import com.gemini.shopping.GeminishoppingBackend.model.Product;
import com.gemini.shopping.GeminishoppingBackend.model.Slider;
import com.gemini.shopping.GeminishoppingBackend.model.User;



@Controller
@RequestMapping("/json/data")
public class JsondataController {
	
	@Autowired
	private CategoryDAO categoryDao;
	@Autowired
	private ProductDAO productDao;
	@Autowired
	private SliderDAO sliderDao;
	@Autowired
	private UserDAO userDAO;
	@Autowired
	private ContactUsDAO contactusDao;
	@RequestMapping("/all/category")
	@ResponseBody	
	public List<Category> getAllcategorys()
	{
		return categoryDao.listofcategory();
	}
	@RequestMapping("/all/products")
	@ResponseBody	
	public List<Product> getAllProducts()
	{
		return productDao.list();
	}
	@RequestMapping("/all/sliders")
	@ResponseBody	
	public List<Slider> getAllSliders()
	{
		return sliderDao.list();
	}
	@RequestMapping("/all/users")
	@ResponseBody	
	public List<User> getAllUsers()
	{
		return userDAO.list();
	}
	@RequestMapping("/all/contact")
	@ResponseBody
	public List<ContactUs>  getallthecontacts(){
		return contactusDao.list();
	}
}
