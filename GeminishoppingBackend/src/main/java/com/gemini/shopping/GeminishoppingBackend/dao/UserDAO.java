package com.gemini.shopping.GeminishoppingBackend.dao;

import java.util.List;

import com.gemini.shopping.GeminishoppingBackend.model.Address;
import com.gemini.shopping.GeminishoppingBackend.model.Cart;
import com.gemini.shopping.GeminishoppingBackend.model.Product;
import com.gemini.shopping.GeminishoppingBackend.model.User;



public interface UserDAO {

boolean addUser(User user);
List<User> list();
User getEmailById(String email);
User get(int id);
boolean addAddress(Address address);
boolean updateuser(User user);
Address getByBillingAddress(User user);
List<Address> listShippingAddress(User user);

// boolean addCart(Cart cart);

boolean updateCart(Cart cart);
}

