package com.gemini.geminishopping.controller;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.servlet.ModelAndView;
import com.gemini.geminishopping.service.CartService;
	@Controller
	@RequestMapping("/cart")
	public class CartController {
	@Autowired
	private CartService cartService;



	@RequestMapping(value= {"/checkout"})
	public ModelAndView checkout() {
	ModelAndView mv = new ModelAndView("index");
	mv.addObject("title", "Checkout page");
	mv.addObject("userClickCheckout", true);
	//mv.addObject("cartLines", cartService.getCartLines());
	return mv;
	}
	@RequestMapping("/view")
	public ModelAndView showCart(@RequestParam(name="result",required=false)String result)
	{
	ModelAndView mv=new ModelAndView("page");
	mv.addObject("title","View Cart");
	mv.addObject("userClickcart",true);
	mv.addObject("cartLines",cartService.getCartLines());

	if(result!=null)
	{
	switch(result)
	{
	case "unavailable":mv.addObject("message","Out of Stock..!!");
	break;

	case "updated":mv.addObject("message","Cart has been updated..!!");
	break;

	case "deleted":mv.addObject("message","Cart has been deleted..!!");
	break;

	case "added":mv.addObject("message","Product added to cart..!!");
	break;

	case "maximum":mv.addObject("message","Sorry product quantity cannot exceed more than 4.!!");
	break;
	}
	}

	return mv;
	}

	@RequestMapping("/{cartLineId}/update")
	public String updateCart(@PathVariable int cartLineId,@RequestParam int count)
	{
	String response=cartService.manageCartLine(cartLineId,count);
	return "redirect:/cart/view?"+response;
	}

	@RequestMapping("/{cartLineId}/delete")
	public String deleteCart(@PathVariable int cartLineId)
	{
	String response=cartService.removeCartLine(cartLineId);
	return "redirect:/cart/view?"+response;
	}

	@RequestMapping("/add/{productId}/product")
	public String addCart(@PathVariable int productId)
	{
	String response=cartService.addCartLine(productId);
	return "redirect:/cart/view?"+response;
	}

	
/*	@RequestMapping("/checkout")
	public ModelAndView order(){
		
		
	}*/
	
	@RequestMapping(value = { "/payment" })
	public ModelAndView payment()
	{
		ModelAndView mv = new ModelAndView("page");
		mv.addObject("title", "G-Shopping checkout");
		mv.addObject("userClickchechout", true);
		mv.addObject("cartLines",cartService.getCartLines());

		return mv;
		
	}

	
	}


	