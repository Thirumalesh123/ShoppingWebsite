package com.gemini.geminishopping.util;



import java.io.File;

import javax.servlet.http.HttpServletRequest;

import org.springframework.web.multipart.MultipartFile;

public class ProducrtFileUtility {
  private static final String ABS_PATH="C:\\Users\\Tirumalesh\\FinalProject\\Geminishopping\\src\\main\\webapp\\resources\\images\\productimages\\";
  private static String REAL_PATH=null;
  public static boolean uploadFile(HttpServletRequest request,MultipartFile file,String code)
  {
	  REAL_PATH=request.getSession().getServletContext().getRealPath("/resources/images/productimages");
	  if(!new File(REAL_PATH).exists())
	  {
		  new File(REAL_PATH).mkdir();
	  }
	  if(!new File(ABS_PATH).exists()) {
		  new File(ABS_PATH).mkdir();
	  }
	  try {
		  file.transferTo(new File(REAL_PATH+code+".jpg"));
		  file.transferTo(new File(ABS_PATH+code+".jpg"));
	  }
	  catch(Exception ex) {
		  ex.printStackTrace();
	  }
	  return true;
  }







}
