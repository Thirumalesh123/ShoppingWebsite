package com.gemini.shopping.GeminishoppingBackend.dao;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;

import com.gemini.shopping.GeminishoppingBackend.model.Cart;
import com.gemini.shopping.GeminishoppingBackend.model.CartLine;

public interface CartLineDAO {
	@Autowired
	public List<CartLine> list(int cartId);
	public CartLine get(int id);
	public boolean add(CartLine cartLine);
	public boolean update(CartLine cartLine);
	public boolean delete(CartLine cartLine);
	public CartLine getByCartAndProduct(int cartId, int productId);
	boolean updateCart(Cart cart);
	public List<CartLine> listAvailable(int cartId);
}