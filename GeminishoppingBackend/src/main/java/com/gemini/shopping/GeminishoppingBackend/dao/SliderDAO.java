package com.gemini.shopping.GeminishoppingBackend.dao;
import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import com.gemini.shopping.GeminishoppingBackend.model.Category;
import com.gemini.shopping.GeminishoppingBackend.model.Slider;
public interface SliderDAO {
		@Autowired
		List<Slider> list();
		Slider get(int id);
		boolean add(Slider slider);
		boolean update(Slider slider);
		boolean delete(Slider slider);
	}