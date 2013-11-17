// WARNING: DO NOT EDIT THIS FILE. THIS FILE IS MANAGED BY SPRING ROO.
// You may push code into the target .java compilation unit if you wish to edit any member(s).

package sk.tuke.web;

import java.io.UnsupportedEncodingException;
import java.util.ArrayList;
import java.util.List;
import javax.servlet.http.HttpServletRequest;
import javax.validation.Valid;
import org.joda.time.format.DateTimeFormat;
import org.springframework.context.i18n.LocaleContextHolder;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.util.UriUtils;
import org.springframework.web.util.WebUtils;
import sk.tuke.domain.Activity;
import sk.tuke.domain.Project;
import sk.tuke.domain.Users;
import sk.tuke.web.ActivityController;

privileged aspect ActivityController_Roo_Controller {
    
    @RequestMapping(method = RequestMethod.POST, produces = "text/html")
    public String ActivityController.create(@Valid Activity activity, BindingResult bindingResult, Model uiModel, HttpServletRequest httpServletRequest) {
        if (bindingResult.hasErrors()) {
            populateEditForm(uiModel, activity);
            return "activitys/create";
        }
        uiModel.asMap().clear();
        activity.persist();
        return "redirect:/activitys/" + encodeUrlPathSegment(activity.getId().toString(), httpServletRequest);
    }
    
    @RequestMapping(params = "form", produces = "text/html")
    public String ActivityController.createForm(Model uiModel) {
        populateEditForm(uiModel, new Activity());
        List<String[]> dependencies = new ArrayList<String[]>();
        if (Project.countProjects() == 0) {
            dependencies.add(new String[] { "project", "projects" });
        }
        uiModel.addAttribute("dependencies", dependencies);
        return "activitys/create";
    }
    
    @RequestMapping(value = "/{id}", produces = "text/html")
    public String ActivityController.show(@PathVariable("id") Long id, Model uiModel) {
        addDateTimeFormatPatterns(uiModel);
        uiModel.addAttribute("activity", Activity.findActivity(id));
        uiModel.addAttribute("itemId", id);
        return "activitys/show";
    }
    
    @RequestMapping(produces = "text/html")
    public String ActivityController.list(@RequestParam(value = "page", required = false) Integer page, @RequestParam(value = "size", required = false) Integer size, Model uiModel) {
        if (page != null || size != null) {
            int sizeNo = size == null ? 10 : size.intValue();
            final int firstResult = page == null ? 0 : (page.intValue() - 1) * sizeNo;
            uiModel.addAttribute("activitys", Activity.findActivityEntries(firstResult, sizeNo));
            float nrOfPages = (float) Activity.countActivitys() / sizeNo;
            uiModel.addAttribute("maxPages", (int) ((nrOfPages > (int) nrOfPages || nrOfPages == 0.0) ? nrOfPages + 1 : nrOfPages));
        } else {
            uiModel.addAttribute("activitys", Activity.findAllActivitys());
        }
        addDateTimeFormatPatterns(uiModel);
        return "activitys/list";
    }
    
    @RequestMapping(method = RequestMethod.PUT, produces = "text/html")
    public String ActivityController.update(@Valid Activity activity, BindingResult bindingResult, Model uiModel, HttpServletRequest httpServletRequest) {
        if (bindingResult.hasErrors()) {
            populateEditForm(uiModel, activity);
            return "activitys/update";
        }
        uiModel.asMap().clear();
        activity.merge();
        return "redirect:/activitys/" + encodeUrlPathSegment(activity.getId().toString(), httpServletRequest);
    }
    
    @RequestMapping(value = "/{id}", params = "form", produces = "text/html")
    public String ActivityController.updateForm(@PathVariable("id") Long id, Model uiModel) {
        populateEditForm(uiModel, Activity.findActivity(id));
        return "activitys/update";
    }
    
    @RequestMapping(value = "/{id}", method = RequestMethod.DELETE, produces = "text/html")
    public String ActivityController.delete(@PathVariable("id") Long id, @RequestParam(value = "page", required = false) Integer page, @RequestParam(value = "size", required = false) Integer size, Model uiModel) {
        Activity activity = Activity.findActivity(id);
        activity.remove();
        uiModel.asMap().clear();
        uiModel.addAttribute("page", (page == null) ? "1" : page.toString());
        uiModel.addAttribute("size", (size == null) ? "10" : size.toString());
        return "redirect:/activitys";
    }
    
    void ActivityController.addDateTimeFormatPatterns(Model uiModel) {
        uiModel.addAttribute("activity_dateoftermination_date_format", DateTimeFormat.patternForStyle("M-", LocaleContextHolder.getLocale()));
    }
    
    void ActivityController.populateEditForm(Model uiModel, Activity activity) {
        uiModel.addAttribute("activity", activity);
        addDateTimeFormatPatterns(uiModel);
        uiModel.addAttribute("projects", Project.findAllProjects());
        uiModel.addAttribute("userses", Users.findAllUserses());
    }
    
    String ActivityController.encodeUrlPathSegment(String pathSegment, HttpServletRequest httpServletRequest) {
        String enc = httpServletRequest.getCharacterEncoding();
        if (enc == null) {
            enc = WebUtils.DEFAULT_CHARACTER_ENCODING;
        }
        try {
            pathSegment = UriUtils.encodePathSegment(pathSegment, enc);
        } catch (UnsupportedEncodingException uee) {}
        return pathSegment;
    }
    
}