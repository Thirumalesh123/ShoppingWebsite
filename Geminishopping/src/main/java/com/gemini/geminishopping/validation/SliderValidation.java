package com.gemini.geminishopping.validation;

import org.springframework.validation.Errors;
import org.springframework.validation.Validator;

import com.gemini.shopping.GeminishoppingBackend.model.Slider;

public class SliderValidation implements Validator{
	@Override
	public boolean supports(Class<?> clazz) {
		return Slider.class.equals(clazz);
	}

	@Override
	public void validate(Object target, Errors error) {
		Slider slider=(Slider)target;
		if(slider.getFile()==null || slider.getFile().getOriginalFilename().equals("")) {
			error.rejectValue("file",null,"please select an image file for upload");
			return;
		}
		if(!(slider.getFile().getContentType().equals("image/jpg")
			||slider.getFile().getContentType().equals("image/jpeg")
			||slider.getFile().getContentType().equals("image/png")
			||slider.getFile().getContentType().equals("image/gif")
				)) {
			error.rejectValue("file",null,"please select an image file");
			return;
		}
	}
}
