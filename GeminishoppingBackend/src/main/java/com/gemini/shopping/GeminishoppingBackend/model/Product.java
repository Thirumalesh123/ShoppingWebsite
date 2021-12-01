package com.gemini.shopping.GeminishoppingBackend.model;


import java.util.UUID;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;
import javax.persistence.Transient;
import javax.validation.constraints.Min;
import javax.validation.constraints.NotBlank;

import org.springframework.web.multipart.MultipartFile;
@Entity
@Table(name="product")
public class Product {
	@Id
	private int id;
	@NotBlank(message="please enter your Name!")
	private String name;
	@Min(value=1,message="price can't be less than 1")
	private float cost;
	private String code;
	@Column(name="is_active")
	private boolean isactive;
	private int quantity;
	private int purchases;
	private int views;
	@Column(name="category_id")
	private int categoryId;
	private String Gender;
	private float rateing;
	@NotBlank(message="please add product Additional info")
	private String additionalfeatures;
	private boolean featured;
	@Column(name="supplier_id")
	private int supplierId;
	@NotBlank(message="please enter your Brand!")
	private String brand;
	@NotBlank(message="please add product description")
	private String description;
	@Transient
	private MultipartFile file;
	public Product() {
		this.code="PRD"+UUID.randomUUID().toString().substring(26).toUpperCase();
	}
	public MultipartFile getFile() {
		return file;
	}
	public void setFile(MultipartFile file) {
		this.file = file;
	}
	
	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
	}
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public float getCost() {
		return cost;
	}
	public void setCost(float cost) {
		this.cost = cost;
	}
	public String getCode() {
		return code;
	}
	public void setCode(String code) {
		this.code = code;
	}
	public boolean getIsactive() {
		return isactive;
	}
	public void setIsactive(boolean isactive) {
		this.isactive = isactive;
	}
	public int getQuantity() {
		return quantity;
	}
	public void setQuantity(int quantity) {
		this.quantity = quantity;
	}
	public int getPurchases() {
		return purchases;
	}
	public void setPurchases(int purchases) {
		this.purchases = purchases;
	}
	public int getViews() {
		return views;
	}
	public void setViews(int views) {
		this.views = views;
	}
	public int getCategoryId() {
		return categoryId;
	}
	public void setCategoryId(int categoryId) {
		this.categoryId = categoryId;
	}
	public int getSupplierId() {
		return supplierId;
	}
	public void setSupplierId(int supplierId) {
		this.supplierId = supplierId;
	}
	public String getBrand() {
		return brand;
	}
	public void setBrand(String brand) {
		this.brand = brand;
	}
	public String getDescription() {
		return description;
	}
	public void setDescription(String description) {
		this.description = description;
	}
	
	public float getRateing() {
		return rateing;
	}
	public void setRateing(float rateing) {
		this.rateing = rateing;
	}
	public boolean isFeatured() {
		return featured;
	}
	public void setFeatured(boolean featured) {
		this.featured = featured;
	}
	public String getAdditionalfeatures() {
		return additionalfeatures;
	}
	public void setAdditionalfeatures(String additionalfeatures) {
		this.additionalfeatures = additionalfeatures;
	}
	public String getGender() {
		return Gender;
	}
	public void setGender(String gender) {
		Gender = gender;
	}
	@Override
	public String toString() {
		return "Product [id=" + id + ", name=" + name + ", cost=" + cost + ", code=" + code + ", isactive=" + isactive
				+ ", quantity=" + quantity + ", purchases=" + purchases + ", views=" + views + ", categoryId="
				+ categoryId + ", Gender=" + Gender + ", rateing=" + rateing + ", additionalfeatures="
				+ additionalfeatures + ", featured=" + featured + ", supplierId=" + supplierId + ", brand=" + brand
				+ ", description=" + description + "]";
	}
	
	
	

}