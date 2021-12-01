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
@Table(name="contactus")
public class ContactUs {
	@Id
	private int id;
	@NotBlank(message="please Enter  Name!")
	private String name;
	@NotBlank(message="please enter Phone Number")
	private String phoneno;
	@NotBlank(message="please enter Email")
	private String email;
	@NotBlank(message="please enter  message")
	private String message;
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
	public String getPhoneno() {
		return phoneno;
	}
	public void setPhoneno(String phoneno) {
		this.phoneno = phoneno;
	}
	public String getEmail() {
		return email;
	}
	public void setEmail(String email) {
		this.email = email;
	}
	public String getMessage() {
		return message;
	}
	public void setMessage(String message) {
		this.message = message;
	}
	@Override
	public String toString() {
		return "ContactUs [id=" + id + ", name=" + name + ", phoneno=" + phoneno + ", email=" + email + ", message="
				+ message + "]";
	}
	
	

}
