package com.gemini.geminishopping.validation;
import org.springframework.validation.Errors;
import org.springframework.validation.Validator;

import com.gemini.shopping.GeminishoppingBackend.model.Category;
public class CategoryValidation implements Validator{
	@Override
	public boolean supports(Class<?> clazz) {
		return Category.class.equals(clazz);
	}

	@Override
	public void validate(Object target, Errors error) {
		Category category=(Category)target;
		if(category.getFile()==null || category.getFile().getOriginalFilename().equals("")) {
			error.rejectValue("file",null,"please select an image file for upload");
			return;
		}
		if(!(category.getFile().getContentType().equals("image/jpg")
			||category.getFile().getContentType().equals("image/jpeg")
			||category.getFile().getContentType().equals("image/png")
			||category.getFile().getContentType().equals("image/gif")
				)) {
			error.rejectValue("file",null,"please select an image file");
			return;
		}
	}
}
