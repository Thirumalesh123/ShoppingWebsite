package com.gemini.shopping.GeminishoppingBackend.daoimpl;

import java.util.List;

import org.hibernate.SessionFactory;
import org.hibernate.query.Query;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import com.gemini.shopping.GeminishoppingBackend.dao.SliderDAO;
import com.gemini.shopping.GeminishoppingBackend.model.Category;
import com.gemini.shopping.GeminishoppingBackend.model.Slider;


@Transactional
@Repository("sliderDao")
public class SliderDAOImpl implements SliderDAO{
	@Autowired
	private SessionFactory sessionFactory;
	@Override
	public List<Slider> list() {
		String listCategory="FROM Slider";
		Query query=sessionFactory.getCurrentSession().createQuery(listCategory);
		return query.getResultList();
	}

	@Override
	public Slider get(int id) {
		return sessionFactory.getCurrentSession().get(Slider.class,Integer.valueOf(id));
	}

	@Override
	public boolean add(Slider slider) {
		try {
			sessionFactory.getCurrentSession().persist(slider);
			return true;
		}
		
		catch(Exception ex) {
			ex.printStackTrace();
			return false;
		}
	}

	@Override
	public boolean update(Slider slider) {
		try {
			sessionFactory.getCurrentSession().update(slider);
			return true;
		}
		catch(Exception ex) {
			ex.printStackTrace();
			return false;
		}
	}

	@Override
	public boolean delete(Slider slider) {
		
		try {
			sessionFactory.getCurrentSession().delete(slider);
			return true;
		}
		catch(Exception ex) {
			ex.printStackTrace();
			return false;
		}
	}

}
