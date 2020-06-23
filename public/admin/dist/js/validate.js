 $(document).ready(function() {
      
            //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
            $("#login").validate({
                rules: {
                    email: {
                     required:true,
                     email:true
                    },
                    
                    password: {
                        required: true,
                        minlength: 8,
                      
                    }
                   
      
                },
                messages: {
                    email: {
                     required:"Email không được để rỗng",
                     emaiil:"Email sai định dạng"
                    },
                    password: {
                     required:"Mật khẩu không được để rỗng",
                     minlength:"Tối thiểu 8 kí tự"
                  }
                }
            });
            //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
            $("#register").validate({
                rules: {
                    name: {
                     required:true,
                     minlength:5
                    },
                    email: {
                          required: true,
                          email: true
                      },
                    password: {
                        required: true,
                        minlength: 8,
                      
                    },
                   confirm_password: {
                          required: true,
                          equalTo: "#user-pass"
                      }
                 
      
                },
                messages: {
                    name: {
                     required:"Tên không được để rỗng",
                     minlength:"Tối thiểu 5 kí tự"
                    },
                    email: {
                     required:"Email không được để rỗng",
                     email:"Email sai định dạng"
                    },
                    password: {
                     required:"Mật khẩu không được để rỗng",
                     minlength:"Tối thiểu 8 kí tự"
                  },
                  confirm_password: {
                          required: 'Vui lòng xác nhận mật khẩu',
                        
                          equalTo: 'Mật khẩu xác nhận không khớp'
                      }
                }
            });
             $("#contactForm").validate({
                rules: {
                    name: {
                     required:true,
                     minlength:5
                    },
                    
                    email: {
                      required: true,
                      email:true
                      
                    },
                    comment:{
                      required:true,
                      minlength:5 
                    }
                   
      
                },
                messages: {
                    name: {
                     required:"Tên không được để rỗng",
                     minlength:"Tối thiểu 5 kí tự"
                    },
                    email: {
                     required:"Mật khẩu không được để rỗng",
                     email:"Email sai định dạng"
                  },
                   comment: {
                     required:"Ghi chú không được để rỗng",
                      minlength:"Tối thiểu 5 kí tự"
                  }
                }
            });
             $('#addcategory').validate({
                name:{
                  required:true
                },
                messages:{
                  required:"Tên dannh mục không được để trống"
                }
             });
        });

  