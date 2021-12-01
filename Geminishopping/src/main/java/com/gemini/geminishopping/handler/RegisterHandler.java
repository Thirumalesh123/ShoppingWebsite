package com.gemini.geminishopping.handler;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.binding.message.MessageBuilder;
import org.springframework.binding.message.MessageContext;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Component;
import com.gemini.geminishopping.model.RegisterModel;
import com.gemini.shopping.GeminishoppingBackend.dao.UserDAO;
import com.gemini.shopping.GeminishoppingBackend.model.Address;
import com.gemini.shopping.GeminishoppingBackend.model.Cart;
import com.gemini.shopping.GeminishoppingBackend.model.User;
@Component
public class RegisterHandler {
	@Autowired
	UserDAO userDAO;
	@Autowired
	private PasswordEncoder passwordEncoder;
	public RegisterModel init() {
		return new RegisterModel();
	}

	public void addUser(RegisterModel registerModel, User user) {
		registerModel.setUser(user);
	}

	public void addBilling(RegisterModel registerModel, Address billing) {
		registerModel.setBilling(billing);
	}

	public String saveAll(RegisterModel registerModel) {
		String transitionValue = "success";
		User user = registerModel.getUser();
		if (user.getRole().equals("USER")) {
			Cart cart = new Cart();
			cart.setUser(user);
			user.setCart(cart);
		}
		user.setPassword(passwordEncoder.encode(user.getPassword()));
		userDAO.addUser(user);

		Address billing = registerModel.getBilling();
		billing.setUser(user);
		billing.setBilling(true);
		userDAO.addAddress(billing);

		return transitionValue;
	}

	public String validateUser(User user, MessageContext error) {
		String transitionValue = "success";
		if(user.getPassword().equals("") && user.getConfirmPassword().equals("")) {
		if (!user.getPassword().equals(user.getConfirmPassword())) {
			error.addMessage(new MessageBuilder().error().source("confirmPassword")
					.defaultText("Please Give the correct password, its not matching with given password").build());
			transitionValue = "failure";
		}
		}
		if (userDAO.getEmailById(user.getEmail()) != null) {
			error.addMessage(
					new MessageBuilder().error().source("email").defaultText("Email is already taken!!").build());
			transitionValue = "failure";
		}
		return transitionValue;
	}
}