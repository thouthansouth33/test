package com.internousdev.tempa.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import com.internousdev.tempa.util.DBConnector;
import com.internousdev.tempa.util.DateUtil;

public class UserCreateCompleDAO {

	public void createUser(String loginUserId,String loginUserPassword,String userName){

		DateUtil dateUtil = new DateUtil();
		DBConnector db = new DBConnector();
		Connection con = db.getConnection();

		String sql = "INSERT INTO login_user_transaction(login_id,login_pass,user_name,insert_date)VALUES(?,?,?,?)";

		try{
			PreparedStatement ps = con.prepareStatement(sql);
			ps.setString(1, loginUserId);
			ps.setString(2, loginUserPassword);
			ps.setString(3, userName);
			ps.setString(4, dateUtil.getDate());

			ps.execute();
		} catch(Exception e){
			e.printStackTrace();
		} finally{
			try{
				con.close();
			} catch(Exception e){
				e.printStackTrace();
			}
		}
	}

}
