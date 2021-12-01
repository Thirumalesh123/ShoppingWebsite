package com.gemini.shopping.GeminishoppingBackend.daoimpl;

import java.util.List;

import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import com.gemini.shopping.GeminishoppingBackend.dao.ContactUsDAO;
import com.gemini.shopping.GeminishoppingBackend.model.ContactUs;
import com.gemini.shopping.GeminishoppingBackend.model.User;

@Transactional
@Repository("contactus")
public class ContactUsDAOImpl implements ContactUsDAO {
	@Autowired
	private SessionFactory sessionFactory;
	@Override
	public List<ContactUs> list() {
		return sessionFactory.getCurrentSession().createQuery("FROM ContactUs", ContactUs.class).getResultList();
	}

	@Override
	public boolean add(ContactUs contactUs) {
		try {
			sessionFactory.getCurrentSession().persist(contactUs);
			return true;
		}
		
		catch(Exception ex) {
			ex.printStackTrace();
			return false;
		}
	}

}
