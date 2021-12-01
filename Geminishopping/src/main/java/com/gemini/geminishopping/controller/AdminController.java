package com.gemini.geminishopping.controller;

import java.util.List;

import javax.servlet.http.HttpServletRequest;
import javax.validation.Valid;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.servlet.ModelAndView;

import com.gemini.geminishopping.util.FileUtility;
import com.gemini.geminishopping.util.ProducrtFileUtility;
import com.gemini.geminishopping.util.SliderFileUtility;
import com.gemini.geminishopping.validation.CategoryValidation;
import com.gemini.geminishopping.validation.ProductValidation;
import com.gemini.geminishopping.validation.SliderValidation;
import com.gemini.shopping.GeminishoppingBackend.dao.CategoryDAO;
import com.gemini.shopping.GeminishoppingBackend.dao.ContactUsDAO;
import com.gemini.shopping.GeminishoppingBackend.dao.ProductDAO;
import com.gemini.shopping.GeminishoppingBackend.dao.SliderDAO;
import com.gemini.shopping.GeminishoppingBackend.dao.UserDAO;
import com.gemini.shopping.GeminishoppingBackend.model.Category;
import com.gemini.shopping.GeminishoppingBackend.model.Product;
import com.gemini.shopping.GeminishoppingBackend.model.Slider;
import com.gemini.shopping.GeminishoppingBackend.model.User;
@Controller
@RequestMapping("/admin")
public class AdminController {
	@Autowired
	CategoryDAO categoryDao;
	@Autowired
	ProductDAO productDAO;
	@Autowired
	SliderDAO sliderDao;
	@Autowired
	UserDAO userDao;
	@Autowired
	ContactUsDAO contactus;
	@RequestMapping(value = {"", "/", "/home", "/index" })
	public ModelAndView index() {
		ModelAndView mv = new ModelAndView("admin/adminIndex");
		mv.addObject("title", "G-SHOPPING Admin Page");
		mv.addObject("userClickAdminHome", true);
		return mv;

	}
	@RequestMapping(value = {"/category/view"})
	public ModelAndView Categoryview() {
		ModelAndView mv = new ModelAndView("admin/adminIndex");
		mv.addObject("title", "G-SHOPPING Admin Page");
		mv.addObject("userClickAdmincategoryview", true);
		return mv;

	}
	@RequestMapping(value="/insert/category",method=RequestMethod.GET)
	public ModelAndView showmanagecategory(@RequestParam(name="operation",required=false) String operation)
	{
		ModelAndView mv = new ModelAndView("admin/adminIndex");
		mv.addObject("title","G-SHOPPING Inserting Category");
		mv.addObject("userClickInsertcategory",true);
		Category newcategory= new Category();
		
	
		newcategory.setIs_active(true);
		mv.addObject("category",newcategory);
		
		if(operation != null)
		{
			if(operation.equals("category"))
			{
				mv.addObject("message","Updated Successfully!!!");
			}
		}
		
		
		
		return mv;
	}
	
	@RequestMapping(value="/insert/category", method=RequestMethod.POST)
	public String showSubmitCategory(@Valid @ModelAttribute("category") Category mcategory,BindingResult results,Model model,HttpServletRequest request)
	{

		if (mcategory.getId()==0) {
			new CategoryValidation().validate(mcategory,results);
		
		}
		else{	
			if(!mcategory.getFile().getOriginalFilename().equals("")) {
				
				new CategoryValidation().validate(mcategory,results);
			}
			
		}
		if(results.hasErrors()) {
			model.addAttribute("title","G-SHOPPING Category insert");
			model.addAttribute("userClickInsertcategory", true);
			model.addAttribute("message","Insertion Fails");
			return "admin/adminIndex";
		}
		if(!mcategory.getFile().getOriginalFilename().equals("")) {
			
			FileUtility.uploadFile(request,mcategory.getFile(),mcategory.getImage_url());
		}
		
		
		if(mcategory.getId()==0) {
		categoryDao.add(mcategory);
		}
		else {
			categoryDao.update(mcategory);
		}
		return "redirect:/admin/insert/category?operation=category";
	}
	@RequestMapping(value="/manage/category/{id}/activation",method=RequestMethod.POST)
	@ResponseBody
	public String CategoryActiavtion(@PathVariable int id)
	{
		Category category=categoryDao.get(id);
		boolean isActive=category.getIs_active();
		String str="";
		System.out.println(isActive);
		if(isActive==true) {
			category.setIs_active(false);
			categoryDao.update(category);
			str+= "your succesfully deactivated the Category";
		}
		else {
		category.setIs_active(true);
		categoryDao.update(category);
		str+= "your succesfully activated the Category";
		}
		
		return str;
	}
	@RequestMapping(value="/{id}/category",method=RequestMethod.GET)
	public ModelAndView editcategory(@PathVariable int id) {
		ModelAndView mv=new ModelAndView("admin/adminIndex");
		mv.addObject("title","G-SHOPPING Manage Category");
		mv.addObject("userClickInsertcategory",true);
		Category ncategory=categoryDao.get(id);
		mv.addObject("category",ncategory);
		return mv;
	}
	
	
	
	
	//Product Code
	
	
	
	@RequestMapping(value = {"/product/view"})
	public ModelAndView Productview() {
		ModelAndView mv = new ModelAndView("admin/adminIndex");
		mv.addObject("title", "Admin Page");
		mv.addObject("userClickAdminproductview", true);
		return mv;

	}
	@RequestMapping(value="/insert/products")
	public ModelAndView showmanageProducts(@RequestParam(name="operation",required=false) String operation)
	{
		ModelAndView mv = new ModelAndView("admin/adminIndex");
		mv.addObject("title","G-SHOPPING Inserting Products");
		mv.addObject("userClickInsertProduct",true);
		Product newproduct= new Product();
		
		newproduct.setSupplierId(1);
		newproduct.setIsactive(true);
		mv.addObject("product",newproduct);
		
		if(operation != null)
		{
			if(operation.equals("product"))
			{
				mv.addObject("message","Updated Successfully!!!");
			}
		}
		
		
		
		return mv;
	}
	
	@RequestMapping(value="/insert/products", method=RequestMethod.POST)
	public String showSubmitProducts(@Valid @ModelAttribute("product") Product mproduct,BindingResult results,Model model,HttpServletRequest request)
	{
		if (mproduct.getId()==0) {
			new ProductValidation().validate(mproduct,results);
		
		}
		else{	
			if(!mproduct.getFile().getOriginalFilename().equals("")) {
				
				new ProductValidation().validate(mproduct,results);
			}
			
		}
		if(results.hasErrors()) {
			model.addAttribute("title","G-SHOPPING Products insert");
			model.addAttribute("userClickInsertProduct", true);
			model.addAttribute("message","Sorry Somthing Went Wrong Please try after Some Time");
			return "admin/adminIndex";
		}
		if(!mproduct.getFile().getOriginalFilename().equals("")) {
			ProducrtFileUtility.uploadFile(request,mproduct.getFile(),mproduct.getCode());
		}
		

		if(mproduct.getId()==0) 
		{
		productDAO.add(mproduct);
		}
		else {
			productDAO.update(mproduct);
		}
		return "redirect:/admin/insert/products?operation=product";
	}
	
	
	@ModelAttribute("categories")
	public List<Category> getCategories()
	{
		return categoryDao.list();
	}
	@RequestMapping(value="/product/{id}/activation",method=RequestMethod.POST)
	@ResponseBody
	public String ProductActiavtion(@PathVariable int id)
	{
		Product product=productDAO.get(id);
		boolean isActive=product.getIsactive();
		String str="";
		System.out.println(isActive);
		if(isActive==true) {
			product.setIsactive(false);
			productDAO.update(product);
			str+= "your succesfully deactivated the product";
		}
		else {
		product.setIsactive(true);
		productDAO.update(product);
		str+= "your succesfully activated the product";
		}
		
		return str;
	}
	
	@RequestMapping(value="/{id}/product",method=RequestMethod.GET)
	public ModelAndView editproduct(@PathVariable int id) {
		ModelAndView mv=new ModelAndView("admin/adminIndex");
		mv.addObject("title","Manage Category");
		mv.addObject("userClickInsertProduct",true);
		Product nproduct=productDAO.get(id);
		mv.addObject("product",nproduct);
		return mv;
	}
	
	
	
	
	
	//slider
	
	
	@RequestMapping(value = {"/slider/view"})
	public ModelAndView Slidertview() {
		ModelAndView mv = new ModelAndView("admin/adminIndex");
		mv.addObject("title", "Admin Page");
		mv.addObject("userClickAdminsliderview", true);
		return mv;

	}
	@RequestMapping(value="/insert/slider")
	public ModelAndView showmanageslider(@RequestParam(name="operation",required=false) String operation)
	{
		ModelAndView mv = new ModelAndView("admin/adminIndex");
		mv.addObject("title","Inserting Products");
		mv.addObject("userClickInsertslider",true);
		Slider newslider= new Slider();
		
		mv.addObject("slider",newslider);
		
		if(operation != null)
		{
			if(operation.equals("slider"))
			{
				mv.addObject("message","Updated Successfully !!!");
			}
		}
		
		
		
		return mv;
	}
	
	@RequestMapping(value="/insert/slider", method=RequestMethod.POST)
	public String showSubmitslider(@Valid @ModelAttribute("slider") Slider mslider,BindingResult results,Model model,HttpServletRequest request)
	{
		if (mslider.getId()==0) {
			new SliderValidation().validate(mslider,results);
		
		}
		else{	
			if(!mslider.getFile().getOriginalFilename().equals("")) {
				
				new SliderValidation().validate(mslider,results);
			}
			
		}
		if(results.hasErrors()) {
			model.addAttribute("title","Slider insert");
			model.addAttribute("userClickInsertslider", true);
			model.addAttribute("message","Sorry Somthing Went Wrong Please try after Some Time");
			return "admin/adminIndex";
		}
		if(!mslider.getFile().getOriginalFilename().equals("")) {
			SliderFileUtility.uploadFile(request,mslider.getFile(),mslider.getImage_url());
		}
		

		if(mslider.getId()==0) 
		{
		sliderDao.add(mslider);
		}
		else {
			sliderDao.update(mslider);
		}
		return "redirect:/admin/insert/slider?operation=slider";
	}
	@RequestMapping(value="/{id}/slider",method=RequestMethod.GET)
	public ModelAndView editslider(@PathVariable int id) {
		ModelAndView mv=new ModelAndView("admin/adminIndex");
		mv.addObject("title","Manage Slider");
		mv.addObject("userClickInsertslider",true);
		Slider nslider=sliderDao.get(id);
		mv.addObject("slider",nslider);
		return mv;
	}
	@RequestMapping(value="/{id}/sliderdelete",method=RequestMethod.GET)
	public ModelAndView deleteslider(@PathVariable int id) {
		ModelAndView mv=new ModelAndView("admin/adminIndex");
		mv.addObject("title","Manage Slider");
		mv.addObject("userClickAdminsliderview",true);
		Slider nslider=sliderDao.get(id);
		sliderDao.delete(nslider);
		return mv;
	}
	
	
	
	
	//edit admin
	
	

	@RequestMapping(value="/edit/details")
	public ModelAndView editdetails(@RequestParam(name="details",required=false) String operation)
	{
		ModelAndView mv = new ModelAndView("admin/adminIndex");
		mv.addObject("title","Admin Details");
		mv.addObject("userClickeditdetails",true);
		User newdetails= new User();
		
		mv.addObject("user",newdetails);
		
		if(operation != null)
		{
			if(operation.equals("details"))
			{
				mv.addObject("message","Updated Successfully!!!");
			}
		}
		
		
		
		return mv;
	}
	
	@RequestMapping(value="/edit/details", method=RequestMethod.POST)
	public String showeditdetails(@Valid @ModelAttribute("user") User muser,BindingResult results,Model model,HttpServletRequest request)
	{
			userDao.updateuser(muser);
	
		return "redirect:/admin/details?operation=details";
	}
	@RequestMapping(value="/details",method=RequestMethod.GET)
	public ModelAndView editdetails() {
		ModelAndView mv=new ModelAndView("admin/adminIndex");
		mv.addObject("title","Manage Slider");
		mv.addObject("userClickeditdetails",true);
		User user=userDao.get(1);
		mv.addObject("user",user);
		return mv;
	}
//user view
	
	@RequestMapping(value = {"/user/view"})
	public ModelAndView Userview() {
		ModelAndView mv = new ModelAndView("admin/adminIndex");
		mv.addObject("title", "User view");
		mv.addObject("userClickAdminuserview", true);
		mv.addObject("usercount",userDao.list().size());
		return mv;
	}

	//contact us view
	@RequestMapping(value={"/contact/view"})
	public ModelAndView contactview() {
		ModelAndView mv = new ModelAndView("admin/adminIndex");
		mv.addObject("title", "User view");
		mv.addObject("userClickAdmincontactview", true);
		return mv;
	}
	
}
