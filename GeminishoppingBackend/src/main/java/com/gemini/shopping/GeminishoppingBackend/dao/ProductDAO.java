package  com.gemini.shopping.GeminishoppingBackend.dao;




import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;

import com.gemini.shopping.GeminishoppingBackend.model.Product;



public interface ProductDAO {
	@Autowired
	List<Product> list();
	Product get(int id);
	boolean add(Product product);
	boolean update(Product product);
	boolean delete(Product product);
    List<Product> listActiveProducts();
    List<Product> listActiveProductByCategory(int categoryId);
    List<Product> getLatestActiveProducts(int count);
    List<Product> getbyrateing();
    List<Product> men();
    List<Product> mostviewd();
    List<Product> women();
    List<Product> children();
    List<Product> getbyfeature();
}
 