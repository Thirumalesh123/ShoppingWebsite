
package com.gemini.geminishopping.validation;

import org.springframework.validation.Errors;
import org.springframework.validation.Validator;

import com.gemini.shopping.GeminishoppingBackend.model.ContactUs;


public class ContactValidation implements Validator{
	@Override
	public boolean supports(Class<?> clazz) {
		return ContactUs.class.equals(clazz);
	}

	@Override
	public void validate(Object target, Errors error) {
		ContactUs contact=(ContactUs)target;
		
	}
}
