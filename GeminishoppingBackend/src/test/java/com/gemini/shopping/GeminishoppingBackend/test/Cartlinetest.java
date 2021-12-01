package com.gemini.shopping.GeminishoppingBackend.test;

import static org.junit.Assert.assertEquals;

import org.junit.BeforeClass;
import org.junit.Ignore;
import org.junit.Test;
import org.springframework.context.annotation.AnnotationConfigApplicationContext;

import com.gemini.shopping.GeminishoppingBackend.dao.CartLineDAO;
import com.gemini.shopping.GeminishoppingBackend.dao.ProductDAO;
import com.gemini.shopping.GeminishoppingBackend.dao.UserDAO;
import com.gemini.shopping.GeminishoppingBackend.model.Cart;
import com.gemini.shopping.GeminishoppingBackend.model.CartLine;
import com.gemini.shopping.GeminishoppingBackend.model.Product;
import com.gemini.shopping.GeminishoppingBackend.model.User;


public class Cartlinetest {
private static AnnotationConfigApplicationContext context;
private static CartLineDAO cartlineDAO;
private static ProductDAO productDao;
private static UserDAO userDAO;

private CartLine cartLine = null;

@BeforeClass
public static void init() {
context = new AnnotationConfigApplicationContext();
context.scan("com.gemini.shopping.GeminishoppingBackend");
context.refresh();
cartlineDAO= (CartLineDAO) context.getBean("cartLineDao");
productDao = (ProductDAO) context.getBean("productDao");
userDAO = (UserDAO) context.getBean("userDAO");

}
@Ignore
@Test
public void testAddCartLine() {
User user = userDAO.getEmailById("k@gmail.com");
Cart cart = user.getCart();
Product product = productDao.get(13);
cartLine = new CartLine();
cartLine.setCartId(cart.getId());
cartLine.setProductCount(cartLine.getProductCount() + 1);
cartLine.setBuyingPrice(product.getCost());
cartLine.setTotal(product.getCost() * cartLine.getProductCount());
cartLine.setAvailable(true);
cartLine.setProduct(product);
assertEquals("Cart add", true, cartlineDAO.add(cartLine));
cart.setGrandTotal(cart.getGrandTotal() + cartLine.getTotal());
cart.setCartLines(cart.getCartLines() + 1);
assertEquals("Cart update", true, cartlineDAO.updateCart(cart));
}
}

