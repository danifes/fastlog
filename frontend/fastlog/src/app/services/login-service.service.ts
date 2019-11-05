import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs/Observable';

@Injectable()
export class LoginServiceService {

  constructor(private http: HttpClient) { }

  login(username:string, password:string){
    return this.http.post('localhost:8000/api/login', {
      email: username,
      password: password,
    });
  }
}
