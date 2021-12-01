package com.gemini.shopping.GeminishoppingBackend.daoimpl;
import java.util.List;

import org.hibernate.SessionFactory;
import org.hibernate.query.Query;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import com.gemini.shopping.GeminishoppingBackend.dao.CategoryDAO;
import com.gemini.shopping.GeminishoppingBackend.model.Category;



@Transactional
@Repository("categoryDao")
public class CategoryDAOImpl implements CategoryDAO {
	@Autowired
	
	private SessionFactory sessionFactory;
	@Override
	public List<Category> list() {
		String listCategory="FROM Category where is_active =: is_active";
		Query query=sessionFactory.getCurrentSession().createQuery(listCategory);
		query.setParameter("is_active",true);
		return query.getResultList();
	}
	@Override
	public Category get(int id) {
		return sessionFactory.getCurrentSession().get(Category.class,Integer.valueOf(id));
	}
	
	@Override
	public boolean add(Category category) {
		try {
			sessionFactory.getCurrentSession().persist(category);
			return true;
		}
		
		catch(Exception ex) {
			ex.printStackTrace();
			return false;
		}
	}
	@Override
	public boolean update(Category category) {
		try {
			sessionFactory.getCurrentSession().update(category);
			return true;
		}
		catch(Exception ex) {
			ex.printStackTrace();
			return false;
		}
	}
	@Override
	public boolean delete(Category category) {
		category.setIs_active(false);
		try {
			sessionFactory.getCurrentSession().update(category);
			return true;
		}
		catch(Exception ex) {
			ex.printStackTrace();
			return false;
		}
	}
	@Override
	public List<Category> listofcategory()
	{
		String listCategory="FROM Category ";
		Query query=sessionFactory.getCurrentSession().createQuery(listCategory);
		
		return query.getResultList();
		
	}

}

