package sk.tuke.domain;
import org.springframework.roo.addon.javabean.RooJavaBean;
import org.springframework.roo.addon.jpa.activerecord.RooJpaActiveRecord;
import org.springframework.roo.addon.tostring.RooToString;
import javax.validation.constraints.NotNull;
import javax.validation.constraints.Size;
import java.util.HashSet;
import java.util.Set;
import javax.persistence.CascadeType;
import javax.persistence.ManyToMany;
import javax.persistence.OneToMany;

@RooJavaBean
@RooToString
@RooJpaActiveRecord
public class Users {

    /**
     */
    @NotNull
    private String firstName;

    /**
     */
    @NotNull
    private String lastName;

    /**
     */
    @Size(max = 60)
    private String address;

    /**
     */
    private String phoneNumber;

    /**
     */
    @ManyToMany(cascade = CascadeType.ALL)
    private Set<Activity> activity = new HashSet<Activity>();

    /**
     */
    @OneToMany(cascade = CascadeType.ALL)
    private Set<Report> report = new HashSet<Report>();
}
