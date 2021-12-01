package com.gemini.geminishopping.controller;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.validation.Valid;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.core.Authentication;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.security.web.authentication.logout.SecurityContextLogoutHandler;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.servlet.ModelAndView;

import com.gemini.geminishopping.util.SliderFileUtility;
import com.gemini.geminishopping.validation.ContactValidation;
import com.gemini.geminishopping.validation.SliderValidation;
import com.gemini.shopping.GeminishoppingBackend.dao.CategoryDAO;
import com.gemini.shopping.GeminishoppingBackend.dao.ContactUsDAO;
import com.gemini.shopping.GeminishoppingBackend.dao.ProductDAO;
import com.gemini.shopping.GeminishoppingBackend.dao.SliderDAO;
import com.gemini.shopping.GeminishoppingBackend.model.Category;
import com.gemini.shopping.GeminishoppingBackend.model.ContactUs;
import com.gemini.shopping.GeminishoppingBackend.model.Product;
import com.gemini.shopping.GeminishoppingBackend.model.Slider;
@Controller
public class PageController {
	@Autowired
	CategoryDAO categoryDao;
	@Autowired
	ProductDAO productDao;
	@Autowired
	SliderDAO sliderDao;
	@Autowired
	ContactUsDAO contactDao;	
	@RequestMapping(value = { "/", "/home", "/index" })
	public ModelAndView index() {
		ModelAndView mv = new ModelAndView("page");
		mv.addObject("title", "G-SHOPPING");
		mv.addObject("categories", categoryDao.list());
		mv.addObject("sliders",sliderDao.list());
		mv.addObject("featuredproducts",productDao.getbyfeature());
		mv.addObject("ratedproducts",productDao.getbyrateing());
		mv.addObject("viewedproducts",productDao.mostviewd());
		mv.addObject("userClickHome", true);
		return mv;

	}
	@RequestMapping(value = { "men" })
	public ModelAndView men() {
		ModelAndView mv = new ModelAndView("page");
		mv.addObject("title", "G-shopping Men");
		mv.addObject("userClickMen", true);
		mv.addObject("categories", categoryDao.list());
		mv.addObject("products",productDao.men());
		return mv;

	}
	@RequestMapping(value = { "/women" })
	public ModelAndView women() {
		ModelAndView mv = new ModelAndView("page");
		mv.addObject("title", "G-Shopping Women");
		mv.addObject("userClickWomen", true);
		mv.addObject("categories", categoryDao.list());
		mv.addObject("products",productDao.women());
		return mv;

	}
	@RequestMapping(value = { "/children" })
	public ModelAndView children() {
		ModelAndView mv = new ModelAndView("page");
		mv.addObject("title", "G-Shopping Children");
		mv.addObject("userClickChildren", true);
		mv.addObject("categories", categoryDao.list());
		mv.addObject("products",productDao.children());
		
		return mv;

	}
	@RequestMapping(value = { "/contact" })
	public ModelAndView contact() {
		ModelAndView mv = new ModelAndView("page");
		mv.addObject("title", "G-Shopping Contact");
		mv.addObject("userClickContact", true);
		return mv;
	}
	@RequestMapping(value = { "/about" })
	public ModelAndView about() {
		ModelAndView mv = new ModelAndView("page");
		mv.addObject("title", "G-Shopping About");
		mv.addObject("userClickAbout", true);
		return mv;

	}
	@RequestMapping(value= {"/login"})
	public ModelAndView signup(@RequestParam(name="error",required=false) String error,
			@RequestParam(name="logout",required=false) String logout)
		{
		ModelAndView mv = new ModelAndView("page");
		mv.addObject("title", "G-Shopping login");
	    mv.addObject("userclickedlogin",true);
	    if(error!=null)
	    {
	    mv.addObject("message","username and password is invalid!!");
	    }
	    if(logout!=null)
	    {
	    mv.addObject("logout","You have Logged out Successfully!!");
	    }
	    
		return mv;
	}
	@RequestMapping(value = { "/show/category/{id}/products" })
	public ModelAndView showCategoryProducts(@PathVariable("id") int id) {
		ModelAndView mv = new ModelAndView("page");
		Category category = null;
		category = categoryDao.get(id);
		mv.addObject("title", category.getName());
		mv.addObject("categories", categoryDao.list());
		mv.addObject("products",productDao.listActiveProductByCategory(id));
		mv.addObject("category",category);
		mv.addObject("userClickCategoryProducts", true);
		return mv;
	}
	@RequestMapping(value = { "/show/{id}/product" })
	public ModelAndView showSingleProducts(@PathVariable("id") int id) {
		ModelAndView mv = new ModelAndView("page");
		Product product = productDao.get(id);

		product.setViews(product.getViews()+1);
		productDao.update(product);
		mv.addObject("title", product.getName());
		mv.addObject("product",product);
		mv.addObject("relatedprojects",productDao.listActiveProductByCategory(product.getCategoryId()));
		mv.addObject("userClickSingleProduct", true);
		return mv;
	}
	@RequestMapping(value = { "/access-restricted" })
	public ModelAndView accessRestrict()
	{
	ModelAndView mv = new ModelAndView("error");
	mv.addObject("errorTitle","SorryAccess Denied!!");
	mv.addObject("errorDescription","You are not authorized to access this page!!!");
	mv.addObject("title","403 Access Denied");
	return mv;
	}

	@RequestMapping(value = {"/logout"})
	public String doLogout(HttpServletRequest request,HttpServletResponse response)
	{
	Authentication auth=SecurityContextHolder.getContext().getAuthentication();
	if(auth != null)
	{
	new SecurityContextLogoutHandler().logout(request, response, auth);
	}
	return "redirect:/login?logout";
	}
	
	/*@RequestMapping(value = { "/cart" })
	public ModelAndView cart()
	{
	ModelAndView mv = new ModelAndView("page");
	mv.addObject("title","cart");
	mv.addObject("userClickcart",true);
	return mv;
	}*/
	
	
	
	
	
	@RequestMapping(value="/insert/contact")
	public ModelAndView showmanagecontact(@RequestParam(name="operation",required=false) String operation)
	{
		ModelAndView mv = new ModelAndView("page");
		mv.addObject("userClickContact",true);
		ContactUs contactus= new ContactUs();		
		mv.addObject("contact",contactus);
		
		if(operation != null)
		{
			if(operation.equals("contact"))
			{
				mv.addObject("message","Request is recived Will Reach You backa as soon as possible !!!");
			}
		}
		
		
		
		return mv;
	}
	
	@RequestMapping(value="/insert/contact", method=RequestMethod.POST)
	public String showmanagecontact(@Valid @ModelAttribute("contact") ContactUs contactus,BindingResult results,Model model,HttpServletRequest request)
	{
		
		if(results.hasErrors()) {
			model.addAttribute("title","Slider insert");
			model.addAttribute("userClickContact", true);
			model.addAttribute("message","Sorry Somthing Went Wrong Please try after Some Time");
			return "page";
		}
		contactDao.add(contactus);
		
		return "redirect:/insert/contact?operation=contact";
	}
	
	//checkout
	
	@RequestMapping(value = { "/checkout" })
	public ModelAndView checkout()
	{
		ModelAndView mv = new ModelAndView("page");
		mv.addObject("title", "G-Shopping checkout");
		mv.addObject("userClickchechout", true);
		return mv;
		
	}
	//address
	@RequestMapping(value = { "/address" })
	public ModelAndView address()
	{
		ModelAndView mv = new ModelAndView("page");
		mv.addObject("title", "G-Shopping address");
		mv.addObject("userClickaddress", true);
		return mv;
		
	}
}
