package com.gemini.shopping.GeminishoppingBackend.daoimpl;

import java.util.List;

import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import com.gemini.shopping.GeminishoppingBackend.dao.UserDAO;
import com.gemini.shopping.GeminishoppingBackend.model.Address;
import com.gemini.shopping.GeminishoppingBackend.model.Cart;
import com.gemini.shopping.GeminishoppingBackend.model.Product;
import com.gemini.shopping.GeminishoppingBackend.model.Slider;
import com.gemini.shopping.GeminishoppingBackend.model.User;


@Repository("userDAO")
@Transactional
public class UserDAOImpl implements UserDAO {

@Autowired
SessionFactory sessionFactory;

@Override
public boolean addUser(User user) {

try {
sessionFactory.getCurrentSession().persist(user);
return true;
}

catch (Exception ex) {
ex.printStackTrace();
return false;
}
}
@Override
public User get(int id) {
	return sessionFactory.getCurrentSession().get(User.class,Integer.valueOf(id));
}

@Override
public User getEmailById(String email) {
String selectQuery = "FROM User where email =: email";
try {
return sessionFactory.getCurrentSession().createQuery(selectQuery, User.class)
.setParameter("email", email)
.getSingleResult();
}

catch (Exception ex) {
ex.printStackTrace();
return null;
}
}

@Override
public boolean addAddress(Address address) {
try {
sessionFactory.getCurrentSession().persist(address);
return true;
}

catch (Exception ex) {
ex.printStackTrace();
return false;
}
}

@Override
public Address getByBillingAddress(User user) {
String selectQuery="FROM Address WHERE user =:user AND billing =:billing";
try {
return sessionFactory.getCurrentSession().createQuery(selectQuery,Address.class)
.setParameter("user",user)
.setParameter("billing",true)
.getSingleResult();

}

catch(Exception ex) {
ex.printStackTrace();
return null;
}
}

@Override
public List<Address> listShippingAddress(User user) {
String selectQuery="FROM Address WHERE user =:user AND shipping =:shipping";
try {
return sessionFactory.getCurrentSession().createQuery(selectQuery,Address.class)
.setParameter("user",user)
.setParameter("shipping",true)
.getResultList();

}

catch(Exception ex) {
ex.printStackTrace();
return null;
}
}

@Override
public boolean updateuser(User user) {
	try {
		sessionFactory.getCurrentSession().update(user);
		return true;
	}
	catch(Exception ex) {
		ex.printStackTrace();
		return false;
	}
}

@Override
public boolean updateCart(Cart cart) {
try {
sessionFactory.getCurrentSession().update(cart);
return true;
}

catch(Exception ex) {
ex.printStackTrace();
return false;
}
}
@Override
public List<User> list(){
	return sessionFactory.getCurrentSession().createQuery("FROM User", User.class).getResultList();
}
}