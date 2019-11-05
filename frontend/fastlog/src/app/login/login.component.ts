import { Component, OnInit } from '@angular/core';
import { LoginServiceService } from '../services/login-service.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  public username = '';
  public password = '';

  constructor(private loginService: LoginServiceService) { }

  ngOnInit() {
    
  }

  login(username: string, password: string, event: Event){
    event.preventDefault();
    this.loginService.login(username,password).subscribe(
      res => {
        console.log(res);
 
       },
       error => {
         console.error(error);
         
       }
    );
  }

}
