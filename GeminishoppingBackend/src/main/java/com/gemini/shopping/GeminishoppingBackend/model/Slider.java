package com.gemini.shopping.GeminishoppingBackend.model;

import java.util.UUID;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;
import javax.persistence.Transient;
import javax.validation.constraints.NotBlank;

import org.springframework.web.multipart.MultipartFile;

@Entity
@Table(name="slider")
public class Slider {
	@Id
	private int id;
	@NotBlank(message="please Enter  Title!")
	private String heading;
	@NotBlank(message="please enter Tag Line of Slider!")
	private String description;
	private String image_url;
	@Column(name="category_id")
	private int categoryId;
	 @Transient
	private MultipartFile file;
		public Slider() {
			this.image_url="PRD"+UUID.randomUUID().toString().substring(26).toUpperCase();
		}
		public int getId() {
			return id;
		}
		public void setId(int id) {
			this.id = id;
		}
		public String getHeading() {
			return heading;
		}
		public void setHeading(String heading) {
			this.heading = heading;
		}
		public String getDescription() {
			return description;
		}
		public void setDescription(String description) {
			this.description = description;
		}
		public String getImage_url() {
			return image_url;
		}
		public void setImage_url(String image_url) {
			this.image_url = image_url;
		}
		public MultipartFile getFile() {
			return file;
		}
		public void setFile(MultipartFile file) {
			this.file = file;
		}
		public int getCategoryId() {
			return categoryId;
		}
		public void setCategoryId(int categoryId) {
			this.categoryId = categoryId;
		}
		

}
