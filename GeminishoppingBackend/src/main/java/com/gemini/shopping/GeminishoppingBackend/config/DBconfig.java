package com.gemini.shopping.GeminishoppingBackend.config;

import java.util.Properties;

import javax.sql.DataSource;

import org.apache.commons.dbcp2.BasicDataSource;
import org.hibernate.SessionFactory;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.context.annotation.Configuration;
import org.springframework.orm.hibernate5.HibernateTransactionManager;
import org.springframework.orm.hibernate5.LocalSessionFactoryBuilder;
import org.springframework.transaction.annotation.EnableTransactionManagement;


@Configuration
@ComponentScan("com.gemini.shopping.GeminishoppingBackend.model")
@EnableTransactionManagement
public class DBconfig {
	@Bean("dataSource")
	public DataSource getDataSource() 
	{
		BasicDataSource dataSource=new BasicDataSource();
		dataSource.setDriverClassName("com.mysql.cj.jdbc.Driver");
		dataSource.setUrl("jdbc:mysql://127.0.0.1:3306/shopping");
		dataSource.setUsername("root");
		dataSource.setPassword("root");
		return dataSource;
	}
	@Bean
	public SessionFactory getSessionFactory(DataSource dataSource) {
		LocalSessionFactoryBuilder builder=new LocalSessionFactoryBuilder(dataSource);
        builder.addProperties(getHibernateProperties());
        builder.scanPackages("com.gemini.shopping.GeminishoppingBackend.model");
        return builder.buildSessionFactory();
        
	}
	private Properties getHibernateProperties() {
		Properties properties=new Properties();
		properties.put("hibernate.dialect", "org.hibernate.dialect.MySQLDialect");
		properties.put("hibernate.show_sql", "true");
		properties.put("hibernate.format_sql", "true");
		return properties;
	}
	@Bean
	public HibernateTransactionManager getTransactionManager(SessionFactory sessionFactory)
	{
		HibernateTransactionManager transactionManager=new HibernateTransactionManager(sessionFactory);
		return transactionManager;
	}
}

