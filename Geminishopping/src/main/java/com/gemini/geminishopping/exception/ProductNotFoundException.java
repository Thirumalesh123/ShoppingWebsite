package com.gemini.geminishopping.exception;

import java.io.Serializable;

public class ProductNotFoundException extends Exception implements Serializable {

	private String message;

	public String getMessage() {
		return message;
	}

	public ProductNotFoundException()
	{
		this("Product you have search is not there, Kindly Check it Again");
	}

	public ProductNotFoundException(String message) {
		this.message = System.currentTimeMillis() +":" + message;
	}
	
}
