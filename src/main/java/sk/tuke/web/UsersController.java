package sk.tuke.web;
import org.springframework.roo.addon.web.mvc.controller.scaffold.RooWebScaffold;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import sk.tuke.domain.Users;

@RequestMapping("/userses")
@Controller
@RooWebScaffold(path = "userses", formBackingObject = Users.class)
public class UsersController {
}
