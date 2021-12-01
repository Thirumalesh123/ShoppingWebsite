package com.gemini.shopping.GeminishoppingBackend.dao;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;

import com.gemini.shopping.GeminishoppingBackend.model.Category;

public interface CategoryDAO {
	@Autowired
	List<Category> list();
	List<Category> listofcategory();
	Category get(int id);
	boolean add(Category category);
	boolean update(Category category);
	boolean delete(Category category);
}
