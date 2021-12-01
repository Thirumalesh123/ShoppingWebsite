package com.gemini.geminishopping.exception;

import org.springframework.web.bind.annotation.ControllerAdvice;
import org.springframework.web.bind.annotation.ExceptionHandler;
import org.springframework.web.servlet.ModelAndView;
import org.springframework.web.servlet.NoHandlerFoundException;

@ControllerAdvice
public class GlobalDefaultExceptionHandler {
	
	@ExceptionHandler(NoHandlerFoundException.class)
	public ModelAndView noHandlerFoundException()
	{
		ModelAndView mv = new ModelAndView("error");
		
		mv.addObject("errorTitle","Page Not Found");
		mv.addObject("errorDescription","Might be entered Wrong URL, Please Check it Again");
		mv.addObject("title","404 Page Not Found");
		
		return mv;
	}
	
	@ExceptionHandler(ProductNotFoundException.class)
	public ModelAndView noHandlerFoundProductException()
	{
		ModelAndView mv = new ModelAndView("error");
		
		mv.addObject("errorTitle","Product Not Found");
		mv.addObject("errorDescription","Product is not Available");
		mv.addObject("title","404 Product is Not Found");
		
		return mv;
	}

}
