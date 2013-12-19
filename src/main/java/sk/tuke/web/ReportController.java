package sk.tuke.web;
import org.springframework.roo.addon.web.mvc.controller.scaffold.RooWebScaffold;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import sk.tuke.domain.Report;

@RequestMapping("/reports")
@Controller
@RooWebScaffold(path = "reports", formBackingObject = Report.class)
public class ReportController {
}
