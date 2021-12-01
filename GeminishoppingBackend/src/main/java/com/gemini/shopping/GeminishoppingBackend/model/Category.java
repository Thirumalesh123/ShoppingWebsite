package com.gemini.shopping.GeminishoppingBackend.model;
import java.util.UUID;

import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;
import javax.persistence.Transient;
import javax.validation.constraints.NotBlank;

import org.springframework.web.multipart.MultipartFile;
@Entity
@Table(name="category")
public class Category {
	@Id
	private int id;
	@NotBlank(message="please enter Category Name!")
	private String name;
	@NotBlank(message="please enter Description of Category!")
	private String description;

	private String image_url;
	
	 private boolean is_active;
	 @Transient
	private MultipartFile file;
		public Category() {
			this.image_url="PRD"+UUID.randomUUID().toString().substring(26).toUpperCase();
			this.is_active=true;
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

	public boolean getIs_active() {
		return is_active;
	}
	public void setIs_active(boolean is_active) {
		this.is_active = is_active;
	}
	@Override
	public String toString() {
		return "CategoryDAO [id=" + id + ", name=" + name + ", description=" + description + ", image_url=" + image_url
				+ ", is_active=" + is_active + "]";
	}

}
